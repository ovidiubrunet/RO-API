<?php


namespace Application\AdminBundle\EventListener;

use Application\AdminBundle\ApplicationAdminEvents;
use Application\AdminBundle\Event\GetResponseUserEvent;
use Application\AdminBundle\Event\ValidationEvent;
use Application\CoreBundle\Utils\ApiResponse;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpFoundation\Response;
use Application\AdminBundle\Util\JWTGenerator;

class RegistrationListener implements EventSubscriberInterface
{
    private $jwtSecretKey;
    public function __construct($jwtSecretKey)
    {
        $this->jwtSecretKey = $jwtSecretKey;
    }

    /**
     * {@inheritdoc}
     */
    public static function getSubscribedEvents()
    {
        return array(
            ApplicationAdminEvents::REGISTRATION_INITIALIZE => 'onRegisterInitialize',
            ApplicationAdminEvents::REGISTRATION_FAILURE => 'onRegistrationFailure'
        );
    }

    /**
     * @param GetResponseUserEvent $event
     */
    public function onRegisterInitialize(GetResponseUserEvent $event){
        $request = $event->getRequest();
        $user = $event->getUser();

        $jwtConfirmationToken = new JWTGenerator($user->getUsername(), $user->getPassword(), $this->jwtSecretKey);
        $token = $jwtConfirmationToken->generateToken();

        $user->setUsername($request->get("username"));
        $user->setFirstName($request->get("firstName"));
        $user->setLastName($request->get("lastName"));
        $user->setEmail($request->get("email"));
        $user->setPlainPassword($request->get("password"));
        $user->setEnabled(false);
        $user->setConfirmationToken($token);

        return $event->setResponse($user);
    }

    /**
     * @param ValidationEvent $event
     */
    public function onRegistrationFailure(ValidationEvent $event){

        $errors = $event->getValidation()->getErrors(true,true);

        $errorCollection = array();
        foreach($errors as $error){
            $errorCollection[] = $error->getMessage();
        }

        $array = array( 'status' => 400, 'errorMsg' => 'Bad Request', 'errorReport' => $errorCollection);

         return $event->setResponse($array);
    }
}
