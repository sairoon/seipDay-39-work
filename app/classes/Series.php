<?php

namespace App\classes;

class Series
{
    public $firstValue, $lastValue, $totalValue, $option;

    public function __construct($post){
        $this->firstValue = $post['first_value'];
        $this->lastValue = $post['last_value'];
        $this->option = $post['option'];
    }
    public function getSeriesResult(){
        if ($this->firstValue < $this->lastValue){
            while ($this->firstValue<=$this->lastValue){
                $this->totalValue .= $this->firstValue.', ';
                $this->firstValue++;
            }
        }
        elseif($this->firstValue>$this->lastValue){
            while ($this->firstValue>=$this->lastValue){
                $this->totalValue.=$this->firstValue.', ';
                $this->firstValue--;
            }
        }
        else{
            $this->totalValue="Same number disos kee Kana..".' '.$this->firstValue;
        }

//        header('Location: route.php?page=series&message='.$this->totalValue);

    }
    public function getEvenOddResult(){
        if ($this->option=='even'){
            for ($this->firstValue; $this->firstValue<=$this->lastValue;$this->firstValue++){
                if ($this->firstValue % 2 ==0){
                    $this->totalValue .= $this->firstValue.', ';
                }
            }
        }
        elseif($this->option=='odd'){
            for ($this->firstValue; $this->firstValue<=$this->lastValue;$this->firstValue++){
                if ($this->firstValue % 2 ==1){
                    $this->totalValue .= $this->firstValue.', ';
                }
            }
        }
        else{
            $this->totalValue='Option select kor Hala..';
        }
        return rtrim($this->totalValue, ',');
    }
}