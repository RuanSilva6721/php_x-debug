<?php
class FlatArray implements IteratorAggregate
{

    private array $flatArray;

     /**
     * Class constructor.
     */
    public function __construct(array $originArray)
    {
        $this->flatArray  = [];
        $this->flattenArray($originArray);
    }

    /**
     * Summary of flattenArray
     * @param mixed $originArray
     * @return void
     */
    public function flattenArray(array $originArray){
        foreach($originArray as $item){
           $this->flatArray = array_merge($this->flatArray, $item);
        }
    }

    /**
     * Summary of getIterator
     * @return Traversable
     */
    public function getIterator(): Traversable
    {
        return new ArrayIterator($this->flatArray);
    }

}
