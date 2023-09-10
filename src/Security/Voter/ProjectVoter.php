<?php

namespace App\Security\Voter;

use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\Security;
use App\Entity\Projets;
use App\Entity\User;

class ProjectVoter extends Voter
{
    public const EDIT = 'POST_EDIT';
    public const VIEW = 'POST_VIEW';
    public const DELETE = 'POST_DELETE';
    private $security;

    public function __construct(Security $security)
    {
        $this->security = $security;
    }

    protected function supports(string $attribute, mixed $subject): bool
    {
        // replace with your own logic
        // https://symfony.com/doc/current/security/voters.html
        return in_array($attribute, [self::EDIT, self::VIEW,self::DELETE])
            && $subject instanceof \App\Entity\Projets;
    }

    protected function voteOnAttribute(string $attribute, mixed $subject, TokenInterface $token): bool
    {
        $user = $token->getUser();
    
        // if the user is anonymous, do not grant access
        if (!$user instanceof UserInterface) {
            return false;
        }

          /** @var Projets $project */
        $project = $subject;


        // ... (check conditions and return true to grant permission) ...
        switch ($attribute) {
            case self::EDIT:
                // logic to determine if the user can EDIT
                if ($project->getUser()->contains($user)) {
                    return true;
                 }
                
                // return true or false
                break;
            case self::VIEW:
                // logic to determine if the user can VIEW
                //return $this->canView($project, $user);
                if ($project->getUser()->contains($user)) {
                    return true;
                 }
                // return true or false
                break;
                case self::DELETE:
                    // logic to determine if the user can VIEW
                    if ($project->getUser()->contains($user)) {
                        return true;
                     }
                    // return true or false
                    break;
        }
        throw new \LogicException('Sorry the author can only View and Modify!');
      //  return false;
    }
  







}
