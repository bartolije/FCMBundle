<?php

namespace RedjanYm\FCMBundle\Entity;


class TopicNotification extends Notification implements \RedjanYm\FCMBundle\Model\TopicNotification
{
    private $topic;

    /**
     * @inheritdoc
     */
    public function setTopic($topic)
    {
        $this->topic = $topic;

        return $this;
    }

    /**
     * @inheritdoc
     */
    public function getTopic()
    {
        if($this->topic){
            return $this->topic;
        } else {
            throw new \InvalidArgumentException('The Topic Notification must have a Topic!');
        }
    }
}