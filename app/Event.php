<?php
namespace App;
use DateTime;
use Illuminate\Database\Eloquent;
use Illuminate\Database\Eloquent\Model;
use MaddHatter\LaravelFullcalendar\IdentifiableEvent;
class Event extends Model implements IdentifiableEvent
{
    protected $dates    = ['start',"end"];
    protected $fillable = ['title','isAllDay','class','start','end'];
    protected $table    = 'events';
    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }
    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        return (bool)$this->all_day;
    }
    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
        return $this->start;
    }
    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->end;
    }
    /**
     * Get the event's ID
     *
     * @return int|string|null
     */
    public function getId()
    {
        return $this->id;
    }
}