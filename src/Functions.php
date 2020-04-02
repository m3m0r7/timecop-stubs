<?php

if (!function_exists('timecop_freeze')) {
    /**
     * @param DateTimeInterface|int $timestamp
     * @return int
     */
    function timecop_freeze($timestamp): int
    {
    }
}

if (!function_exists('timecop_travel')) {
    /**
     * @param DateTimeInterface|int $timestamp
     * @return int
     */
    function timecop_travel($timestamp): int
    {
    }
}

if (!function_exists('timecop_scale')) {
    /**
     * @param DateTimeInterface|int $timestamp
     * @return int
     */
    function timecop_scale($timestamp): int
    {
    }
}

if (!function_exists('timecop_return')) {
    /**
     * @return int
     */
    function timecop_return(): int
    {
    }
}

if (!function_exists('timecop_time')) {
    /**
     * @return int
     */
    function timecop_time(): int
    {
    }
}

if (!function_exists('timecop_mktime')) {
    /**
     * @param int|null $hour
     * @param int|null $min
     * @param int|null $sec
     * @param int|null $mon
     * @param int|null $day
     * @param int|null $year
     * @return int
     */
    function timecop_mktime(int $hour = null, int $min = null, int $sec = null, int $mon = null, int $day = null, int $year = null): int
    {
    }
}

if (!function_exists('timecop_gmmktime')) {

    /**
     * @param int|null $hour
     * @param int|null $min
     * @param int|null $sec
     * @param int|null $mon
     * @param int|null $day
     * @param int|null $year
     * @return int
     */
    function timecop_gmmktime(int $hour = null, int $min = null, int $sec = null, int $mon = null, int $day = null, int $year = null): int
    {
    }
}

if (!function_exists('timecop_date')) {
    /**
     * @param string $format
     * @param int $timestamp
     * @return string
     */
    function timecop_date(string $format, int $timestamp): string
    {
    }
}

if (!function_exists('timecop_gmdate')) {
    /**
     * @param string $format
     * @param int $timestamp
     * @return string
     */
    function timecop_gmdate(string $format, int $timestamp): string
    {
    }
}

if (!function_exists('timecop_idate')) {
    /**
     * @param string $format
     * @param int $timestamp
     * @return string
     */
    function timecop_idate(string $format, int $timestamp): string
    {
    }
}

if (!function_exists('timecop_getdate')) {
    /**
     * @param int|null $timestamp
     * @return array
     */
    function timecop_getdate(int $timestamp = null): array
    {
    }
}

if (!function_exists('timecop_localtime')) {
    /**
     * @param int|null $timestamp
     * @param bool|null $associative_array
     * @return array
     */
    function timecop_localtime(int $timestamp = null, bool $associative_array = null): array
    {
    }
}


if (!function_exists('timecop_strtotime')) {
    /**
     * @param string $time
     * @param int|null $now
     * @return int
     */
    function timecop_strtotime(string $time, int $now = null): int
    {
    }
}

if (!function_exists('timecop_strftime')) {

    function timecop_strftime()
    {
    }
}

if (!function_exists('timecop_gmstrftime')) {
    /**
     * @param string $format
     * @param int $timestamp
     * @return int
     */
    function timecop_gmstrftime(string $format, int $timestamp): int
    {
    }
}


if (!function_exists('timecop_microtime')) {
    /**
     * @param bool $get_as_float
     * @return array
     */
    function timecop_gettimeofday(bool $get_as_float): array
    {
    }
}

if (!function_exists('timecop_gettimeofday')) {
    /**
     * @param bool $get_as_float
     * @return array
     */
    function timecop_microtime(bool $get_as_float): array
    {
    }
}


if (!function_exists('timecop_unixtojd')) {
    /**
     * @param int $timestamp
     * @return int
     */
    function timecop_unixtojd(int $timestamp): int
    {
    }
}

if (!function_exists('timecop_date_create')) {
    /**
     * @param string $time
     * @param DateTimeZone $object
     * @return DateTime
     */
    function timecop_date_create(string $time, DateTimeZone $object): DateTime
    {
    }
}


if (!function_exists('timecop_date_create_from_format')) {
    /**
     * @param string $time
     * @param DateTimeZone $object
     * @return DateTime
     */
    function timecop_date_create_from_format(string $time, DateTimeZone $object): DateTime
    {
    }
}
if (PHP_VERSION_ID >= 50500) {

    if (!function_exists('timecop_date_create_immutable')) {
        /**
         * @param string $time
         * @param DateTimeZone $object
         * @return DateTimeImmutable
         */
        function timecop_date_create_immutable(string $time, DateTimeZone $object): DateTimeImmutable
        {
        }
    }

    if (!function_exists('timecop_date_create_immutable_from_format')) {
        /**
         * @param string $format
         * @param string $time
         * @param DateTimeZone $object
         * @return DateTimeImmutable
         */
        function timecop_date_create_immutable_from_format(string $format, string $time, DateTimeZone $object): DateTimeImmutable
        {
        }
    }
}
