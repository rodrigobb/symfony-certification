# Doc

* [Request Handling](http://symfony.com/doc/current/components/http_kernel.html)

## Involved events list

Name  <br />   KernelEvents Constant |  Argument passed to the listener
--- | ---
**kernel.request**  <br /> KernelEvents::REQUEST   | **GetResponseEvent** <br /><br />The REQUEST event occurs at the very beginning of request dispatching. <br /><br />This event allows you to create a response for a request before any other code in the framework is executed.
**kernel.controller**   <br /> KernelEvents::CONTROLLER    | **FilterControllerEvent**<br /><br />The CONTROLLER event occurs once a controller was found for handling a request.<br /><br />This event allows you to change the controller that will handle the request.
**kernel.controller_arguments** <br /> KernelEvents::CONTROLLER_ARGUMENTS | **FilterControllerArgumentsEvent**<br /><br />The CONTROLLER_ARGUMENTS event occurs once controller arguments have been resolved.<br /><br />This event allows you to change the arguments that will be passed to the controller.
**kernel.view** <br /> KernelEvents::VIEW  | **GetResponseForControllerResultEvent**<br /><br />The VIEW event occurs when the return value of a controller is not a Response instance.<br /><br />This event allows you to create a response for the return value of the controller.
**kernel.response** <br /> KernelEvents::RESPONSE  | **FilterResponseEvent**<br /><br />The RESPONSE event occurs once a response was created for replying to a request.<br /><br />This event allows you to modify or replace the response that will be replied.
**kernel.finish_request**   <br /> KernelEvents::FINISH_REQUEST    | **FinishRequestEvent**<br /><br />The FINISH_REQUEST event occurs when a response was generated for a request.<br /><br />This event allows you to reset the global and environmental state of the application, when it was changed during the request.
**kernel.terminate**    <br /> KernelEvents::TERMINATE | **PostResponseEvent**<br /><br />The TERMINATE event occurs once a response was sent.<br /><br />This event allows you to run expensive post-response jobs.
**kernel.exception**    <br /> KernelEvents::EXCEPTION | **GetResponseForExceptionEvent**<br /><br />The EXCEPTION event occurs when an uncaught exception appears.<br /><br />This event allows you to create a response for a thrown exception or to modify the thrown exception.





1. ```kernel.request```
  * To create and return a Response directly, or to add information to the Request.
  * Routing Component acts here (```RouterListener```).
  * When setting a response (```Response```) for the kernel.request event, the propagation is stopped. This means listeners with lower priority won't be executed.
  * Symfony uses ```\Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver``` as ControllerResolver (invoqued here).
      * getController is invoked here
      * This subclass includes Service Container injection if ```\Symfony\Component\DependencyInjection\ContainerAwareInterface``` is implemented.

2. ```kernel.controller``
  * The Controller Resolver ```getController``` method is executed **before** this event is dispatched.
  * Initialize things or change the controller (by calling ```FilterControllerEvent::setController``` on the event object that's passed to listeners on this event) just before the controller is executed.

3. ```kernel.response``` or ```kernel.view``` (depending of the value returned by the controller)
  * ```kernel.view``` transform any non-```Response``` return value from a controller into a ```Response```.
  * When setting a response for the ```kernel.view``` event, the propagation is stopped. This means listeners with lower priority won't be executed.
  * ```kernel.view``` is used by ```SensioFrameworkExtraBundle @Template``` and by ```FOSRestBundle``` for example.
  * ```kernel.reponse``` is for modify the response just before it is sent.
  * ```kernel.reponse``` is also dispatched after ```kernel.view```.

4. ```kernel.terminate```
  * To perform some "heavy" action after the response has been streamed to the user.
  * For example, sending emails.
  * For example, stats processing.
  * **only the PHP FPM server API is able to send a response to the client while the server's PHP process still performs some tasks**
  * Can be disabled overriding the terminate method in AppKernel or in custom kernels (indeed should only be called if the kernel implements TerminableInterface).
      * Symfony Framework Kernel **does**

5. `kernel.exception`
  * Handle some type of exception and create an appropriate Response to return for the exception


# Takeaways

``` php
namespace Symfony\Component\HttpKernel;

use Symfony\Component\HttpFoundation\Request;

interface HttpKernelInterface
{
    /**
     * @return Response A Response instance
     */
    public function handle(
        Request $request,
        $type = self::MASTER_REQUEST,
        $catch = true
    );
}
```

* The ```HttpKernel::handle()``` method works internally by dispatching events.
* The Request object has an "attributes" bag which is a perfect spot to store extra, application-specific data about the request.
* ```ControllerResolverInterface::getArguments``` is deprecated in 3.1 where it becomes part of ```ArgumentResolverInterface``` (new in 3.1).
* SensioFrameworkExtraBundle's ```@ParamConverter``` functionality allows you to pass a full object to the controller instead of a scalar value
  * The listener - ```ParamConverterListener``` - uses reflection to look at each of the arguments of the controller and tries to use different methods to convert those to objects, which are then stored in the ```attributes``` property of the Request object.
* The **only requirement for a controller** is that it MUST BE a PHP callable - i.e. a function, method on an object or a Closure.
  * If the controller returns null an exception is thrown
* Arguments list for the controller is obtained using *reflection* and the values are guessed using: name matching between arguments names and attributes keys, type-hinting (see ```@ParamConverter``` before). 

# Snippets 

## Maintenance Listenes and Controller

```php
// AppBundle/EventListener/MaintenanceListener.php
use AppBundle\Controller\MaintenanceController;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\HttpKernel\Event\FilterControllerEvent;

class MaintenanceListener
{
    public function onKernelController(FilterControllerEvent $event)
    {
        if (HttpKernelInterface::MASTER_REQUEST === $event->getRequestType()) {

            if (true === $this->maintenance) {
                $event->setController([
                    new MaintenanceController(),
                    'indexAction'
                ]);
            }
        }
    }
}

Fragmento de: Raúl Fraile. “Symfony Certification”. iBooks. 

```

# Resources

# Questions

# Articles
