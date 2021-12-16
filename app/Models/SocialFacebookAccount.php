<?php
// SocialFacebookAccount.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class SocialFacebookAccount extends Model
{
	protected $table = 'social_facebook_accounts';
  protected $fillable = ['user_id', 'provider_user_id', 'provider'];
  public function user()
  {
      return $this->belongsTo(User::class);
  }
}