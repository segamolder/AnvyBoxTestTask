<?php


	namespace App\Services\Bid\Store;


	use App\Interfaces\AbstractBid;
    use App\Models\Bid;
    use Illuminate\Support\Facades\Storage;

    class Database implements AbstractBid
	{
        /**
         * @var string
         */
        private $name;
        /**
         * @var string
         */
        private $phone;
        /**
         * @var string
         */
        private $text;

        /**
         * Database constructor.
         * @param string $name
         * @param string $phone
         * @param string $text
         */
        public function __construct(string $name, string $phone, string $text)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->text = $text;
        }

        public function store(): bool
        {
            return Bid::create(['name'=>$this->name, 'phone'=>$this->phone, 'text'=>$this->text]) == false ? false : true;
        }
    }
