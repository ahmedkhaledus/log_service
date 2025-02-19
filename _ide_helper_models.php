<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string|null $headers
 * @property string|null $message
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Log newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Log newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Log query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Log whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Log whereHeaders($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Log whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Log whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Log whereUpdatedAt($value)
 */
	class Log extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $log_id
 * @property string|null $version
 * @property string|null $web_service_version
 * @property string|null $database_version
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogApp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogApp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogApp query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogApp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogApp whereDatabaseVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogApp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogApp whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogApp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogApp whereVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogApp whereWebServiceVersion($value)
 */
	class LogApp extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property int|null $log_id
 * @property string|null $brand
 * @property string|null $model
 * @property string|null $ram
 * @property string|null $disk
 * @property string|null $os
 * @property string|null $os_version
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDevice newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDevice newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDevice query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDevice whereBrand($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDevice whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDevice whereDisk($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDevice whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDevice whereLogId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDevice whereModel($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDevice whereOs($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDevice whereOsVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDevice whereRam($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LogDevice whereUpdatedAt($value)
 */
	class LogDevice extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TFactory|null $use_factory
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

