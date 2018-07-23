<?php
namespace Agravic\AIB;
require __DIR__ . '/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use Symfony\Component\Finder\Finder;

/**
 * Class AppTest
 * @package Agravic\AIB
 *
 * The tests currently load a list of email values specified to be valid, or invalid and of difficult to validate natures.
 * These tests are functional for the sake of evaluating which of the chosen libraries will work well for our purposes.
 */
class AppTest extends TestCase
{
  /**
   * @var Finder
   */
  private $finder;
  /**
   * @var array
   */
  private $validValues;

  /**
   * @var array
   */
  private $trickyValidValues;

  /**
   * @var array
   */
  private $invalidValues;

  /**
   * @var array
   */
  private $trickyInvalidValues;

  /**
   * @before
   */
  public function before(){
    $this->finder = new Finder();
    $this->finder->files()->in(TEST_RESOURCES_DIR)->name('emails.json');
    foreach($this->finder as $file){
      $emailHashMap = json_decode($file->getContents());
      $this->validValues = $emailHashMap->valid;
      $this->invalidValues = $emailHashMap->invalid;
      $this->trickyInvalidValues = $emailHashMap->strangeInvalid;
      $this->trickyValidValues = $emailHashMap->strangeValid;
    }
  }

  /**
   * @test
   */
  public function testBaseline() {
    $start = microtime(true);
    $validator = ValidatorFactory::validatorFactory()->baselineValidator();
    $this->go($start, $validator, PhpValidator::class);
  }

  /**
   * @test
   */
  public function testRespect() {
    $start = microtime(true);
    $validator = ValidatorFactory::validatorFactory()->respectValidator();
    $this->go($start, $validator, RespectValidator::class);
  }

  /**
   * @test
   */
  public function testValitron() {
    $start = microtime(true);
    $validator = ValidatorFactory::validatorFactory()->valitronValidator();
    $this->go($start, $validator, ValitronValidator::class);
  }


  /**
   * @test
   */
  public function testRackit() {
    $start = microtime(true);
    $validator = ValidatorFactory::validatorFactory()->rackitValidator();
    $this->go($start, $validator, RackitValidator::class);
  }

  private function go(float $start, Validator $validator, string $validatorClassName){
    $isValid = function (string $value) use ($validator) {
      /** @var EmailAddress $emailAddress */
      return (new EmailAddress($value))->getValid(RespectValidator::class);
    };
    $validResults = array_filter($this->validValues, $isValid);
    $trickyValidResults = array_filter($this->trickyValidValues, $isValid);
    $invalidResults = array_filter($this->invalidValues, $isValid);
    $trickyInvalidResults = array_filter($this->trickyInvalidValues, $isValid);
    $time_elapsed_secs = microtime(true) - $start;

    $results = sprintf("------%s------\nValid: %d\nTrickyValid: %d\nInvalid: %d\nTrickyInvalid: %d\n\nTime: %f\n",
      $validatorClassName,
      count($validResults),
      count($invalidResults),
      count($trickyValidResults),
      count($trickyInvalidResults),
      $time_elapsed_secs);
    var_dump($results);
  }
}
