<?php

namespace NotificationChannels\Clickatell\Exceptions;

class CouldNotSendNotification extends \Exception
{
    /**
     * @param string $message
     * @param int $code
     *
     * @return static
     */
    public static function serviceRespondedWithAnError($message)
    {
        return new static(
            "Clickatell responded with an error: '{$message}'"
        );
    }
}
