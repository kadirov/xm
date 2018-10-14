<?php declare(strict_types=1);

namespace Ka\XmChart\Modules\Mail\Component;

class Mail
{
    /**
     * @param string $to
     * @param string $content
     */
    public static function send(string $to, string $content): void
    {
        \Yii::$app->mailer->compose()
            ->setFrom('noreply@acme.com')
            ->setTo($to)
            ->setHtmlBody($content)
            ->send();
    }
}
