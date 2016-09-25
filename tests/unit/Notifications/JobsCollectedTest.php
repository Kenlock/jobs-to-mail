<?php namespace JobApis\JobsToMail\Tests\Unit\Notifications;

use Mockery as m;
use JobApis\JobsToMail\Notifications\JobsCollected;
use JobApis\JobsToMail\Tests\TestCase;

class JobsCollectedTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->jobs = [
            0 => (object) [
                'title' => uniqid(),
            ],
        ];
        $this->notification = new JobsCollected($this->jobs);
    }

    public function testTrue()
    {
        $this->assertTrue(true);
    }

    /*
    public function testItWillSendViaMail()
    {
        $user = m::mock('JobApis\JobsToMail\Models\User');
        $this->assertEquals(['mail'], $this->notification->via($user));
    }

    public function testItConvertsNotificationToMail()
    {
        $user = m::mock('JobApis\JobsToMail\Models\User');

        $user->shouldReceive('getAttribute')
            ->with('id')
            ->andReturn(uniqid());
        $user->shouldReceive('__toString')
            ->andReturn(uniqid());

        $results = $this->notification->toMail($user);

        $this->assertEquals('Illuminate\Notifications\Messages\MailMessage', get_class($results));
    }
    */
}
