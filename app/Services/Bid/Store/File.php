<?php


	namespace App\Services\Bid\Store;


	use App\Interfaces\AbstractBid;
    use Illuminate\Http\Response;
    use Illuminate\Support\Facades\Storage;

    class File implements AbstractBid
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

        private $path;
        /**
         * File constructor.
         */
        public function __construct(string $name, string $phone, string $text)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->text = $text;
            $this->path = Storage::url('store.txt');
        }

        public function store():bool
        {
            return Storage::append($this->path, $this) == false ? false : true;
        }

        public function __toString()
        {
            return $this->name.';'.$this->phone.';'.$this->text;
        }
    }
