<?php 

namespace Drupal\dino_roar\Controllers;

use Drupal\Core\Controller\ControllerBase;
use Drupal\dino_roar\Jurassic\RoarGenerator;
use Psr\Container\ContainerInterface;
use Symfony\Component\HttpFoundation\Response;
use DependencyInjectionDemo\Notifier\Mailer;
use DependencyInjectionDemo\Notifier\NotifierInterface;
use PDO;


// The class name will be same as the name of the file.
class foxnewsController extends ControllerBase
{
  private $foxnewsGenerator;
  protected $pdo;
  protected $mailerConfig;


  /**
 * SubscriberManager constructor.
 * @param $pdo
 */
  public function __construct(PDO $pdo, NotifierInterface $notifier) {
    $this->pdo = $pdo;
    $this->notifier = $notifier;
  }
  

/**
 * Notifiy subscribers about new content.
 */
  public function notifySubscribers() {
  $sql = 'SELECT * FROM subscribers';

  foreach ($this->pdo->query($sql) as $row) {
    $this->notifier->notify(
      $row['email'],
      'New Article alert for you!',
      sprintf(<<<EOF
      Hello %s! A new article has been published in the domain you have subscribed for. 
      You can visit the link below to read the article below. To unsubscribe, browse to our website, login & click on unsubscribe button!.
      EOF
        , $row['name']),
      'no-reply@blogtrottr.com'
    );
  }
}


  public static function create(ContainerInterface $container)
  {
    $roarGenerator = $container->get('dino_roar.roar_generator');
    return new static($roarGenerator);
  }
}


