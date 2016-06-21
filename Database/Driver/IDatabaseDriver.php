<?php
namespace Database\Driver
{
    interface IDatabaseDriver
    {
        /**
         * Connect to the database
         *
         * @param  array  $options  Connection options
         *
         * @return void
         */
        public function connect(array $options);

        /**
         * Execute the query and set the result property
         *
         * @return void
         */
        public function execute();

        /**
         * Fetch a single object of the result
         *
         * @return  mixed  Result object
         */
        public function fetchObject();
    }
}