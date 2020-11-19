<?php
    interface IShopProduct{
        public function getPrice();
        public function baseLine();
    }

    class ShopProducts implements IShopProduct{
        protected $title;
        protected $price;
        protected $inStock;

        public function __construct(string $title,float $price, bool $inStock)
        {
           $this->title = $title;
            $this->price = $price;
            $this->inStock = $inStock;
        }
        public function getPrice()
        {
            return $this->price;
        }
        public function baseLine(){
            echo "Название: ".$this->title." Цена: ".$this->price." В наличии: ".$this->inStock."<br> \n";
        }
    }
    class BookProduct extends ShopProducts{
        private $pageCount;
        private $authorName;
        private $authorSurname;
        public function __construct(string $title,float $price, bool $inStock, int $pageCount, string $authorName, string $authorSurname)
        {
            parent::__construct($title, $price, $inStock);
            $this->pageCount = $pageCount;
            $this->authorName = $authorName;
            $this->authorSurname = $authorSurname;
        }
        public function baseLine(){
            echo "Название: ".$this->title." Цена: ".$this->price." В наличии: ".$this->inStock." Число страниц: ".$this->pageCount." Автор: ".$this->authorName." ".$this->authorSurname."<br> \n";
        }
    }

    class TeaProduct extends ShopProducts{
        private $color;
        public function __construct(string $title,float $price, bool $inStock, string $color)
        {
            parent::__construct($title, $price, $inStock);
            $this->color = $color;
        }
        public function baseLine(){
            echo "Название: ".$this->title." Цена: ".$this->price." В наличии: ".$this->inStock." Цвет: ".$this->color."<br> \n";
        }
    }


    $tea[] = new TeaProduct("Чай Гринфилд", 5.2,true,"black");
    $tea[] = new TeaProduct("Чай Гринфилд", 5.2,true,"red");
    $tea[] = new TeaProduct("Чай Гринфилд", 5.2,true,"green");

    $bocks[] = new BookProduct("Ecce homo", 6,true,350,"Friedrich", "Nietzsche");
    $bocks[] = new BookProduct("Antichrist", 6,true,120,"Friedrich", "Nietzsche");
    $bocks[] = new BookProduct("Bible", 6,true,350,"Friedrich", "Nietzsche");

    foreach ($tea as $item) {
        $item->baseLine();
    }
    echo "<br>";

    foreach ($bocks as $item) {
        $item->baseLine();
    }