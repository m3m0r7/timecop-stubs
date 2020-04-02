<?php

if (!class_exists('TimecopDateTime')) {
    class TimecopDateTime extends DateTime
    {
        /**
         * @param string|null $time
         * @param DateTimeZone|null $object
         * @throws Exception
         */
        public function __construct(string $time = null, DateTimeZone $object = null)
        {
            parent::__construct($time, $object);
        }
    }
}

if (!class_exists('TimecopOrigDateTime')) {
    class TimecopOrigDateTime extends DateTime
    {
        /**
         * TimecopOrigDateTime constructor.
         * @param string|null $time
         * @param DateTimeZone|null $object
         * @throws Exception
         */
        public function __construct(string $time = null, DateTimeZone $object = null)
        {
            parent::__construct($time, $object);
        }
    }
}

if (PHP_VERSION_ID >= 50500) {
    if (!class_exists('TimecopDateTimeImmutable')) {
        class TimecopDateTimeImmutable extends DateTimeImmutable
        {
            /**
             * @param string|null $time
             * @param DateTimeZone|null $object
             * @throws Exception
             */
            public function __construct(string $time = null, DateTimeZone $object = null)
            {
                parent::__construct($time, $object);
            }
        }
    }

    if (!class_exists('TimecopOrigDateTimeImmutable')) {
        class TimecopOrigDateTimeImmutable extends DateTimeImmutable
        {
            /**
             * @param string|null $time
             * @param DateTimeZone|null $object
             */
            public function __construct(string $time = null, DateTimeZone $object = null)
            {
                parent::__construct($time, $object);
            }
        }
    }
}


if (!class_exists('Timecop')) {
    class Timecop
    {
        /**
         * @param DateTimeInterface|int $timestamp
         * @return int
         */
        public static function freeze($timestamp): int
        {
        }

        /**
         * @param DateTimeInterface|int $timestamp
         * @return int
         */
        public static function travel($timestamp): int
        {
        }

        /**
         * @return int
         */
        public static function return(): int
        {
        }
    }
}
