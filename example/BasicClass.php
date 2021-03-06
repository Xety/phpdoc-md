<?php namespace Clean\PhpDocMd\Example;

/**
 * Example_Class is a sample class for demonstrating PHPDoc
 *
 * Example_Class is a class that has no real actual code, but merely
 * exists to help provide people with an understanding as to how the
 * various PHPDoc tags are used.
 */
class BasicClass
{
    /**
     * config
     *
     * @var array
     */
    public $config;

    /**
     * Constructs an object
     *
     * @param array $options options
     *
     * @return void
     */
    public function __construct(array $options)
    {
    }

    /**
     * Adds two arguments
     *
     * @param float $one First argument
     * @param float $two Second argument
     *
     * @return float
     */
    public function addValues($one, $two)
    {
        // code...
    }

    /**
     * Returns one That is long description for one method
     * written in more then one line
     *
     * @return integer
     */
    final public static function one()
    {
        return 1;
    }

    protected function foo()
    {
        // code...
    }

    private function boo()
    {
        // code...
    }
}
