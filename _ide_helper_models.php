<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace CodeProject\Entities{
/**
 * CodeProject\Entities\Client
 *
 * @property integer $id
 * @property string $name
 * @property string $responsible
 * @property string $email
 * @property string $phone
 * @property string $address
 * @property string $obs
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereResponsible($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client wherePhone($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereAddress($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereObs($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Client whereUpdatedAt($value)
 */
	class Client extends \Eloquent {}
}

namespace CodeProject\Entities{
/**
 * CodeProject\Entities\Project
 *
 * @property integer $id
 * @property integer $owner_id
 * @property integer $client_id
 * @property string $name
 * @property string $description
 * @property integer $progress
 * @property integer $status
 * @property string $due_date
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\CodeProject\Entities\ProjectNote[] $notes
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereOwnerId($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereClientId($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereProgress($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereStatus($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereDueDate($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\Project whereUpdatedAt($value)
 */
	class Project extends \Eloquent {}
}

namespace CodeProject\Entities{
/**
 * CodeProject\Entities\ProjectNote
 *
 * @property integer $id
 * @property integer $project_id
 * @property string $title
 * @property string $note
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \CodeProject\Entities\Project $project
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\ProjectNote whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\ProjectNote whereProjectId($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\ProjectNote whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\ProjectNote whereNote($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\ProjectNote whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\ProjectNote whereUpdatedAt($value)
 */
	class ProjectNote extends \Eloquent {}
}

namespace CodeProject\Entities{
/**
 * CodeProject\Entities\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\CodeProject\Entities\User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

