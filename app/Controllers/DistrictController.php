<?php 
namespace App\Controllers;

class DistrictController extends AbstractController {
    public  $users,
            $uins,
            $user;


    public function __construct() {
        $this->user = new UserController;
        $this->users = new \App\Models\UserModel;
        $this->uins = new \App\Models\UINModel;
    }

    public function district() {
        if ($user = $this->user->login($this->user->getLoginUser())) {
            if (isset($_GET['district']) && $this->uins->findOneBy(['slug' => $_GET['district']])) {
                $district = $this->uins->findOneBy(['slug' => $_GET['district']]);
                $districtBoss = $this->users->findOneBy(['id_uin' => $district['id'], 'id_role' => 4]);
                $userIsLeader = ('Region' == $user->role['name'] && 'Boss' == $user->role['subject']);

                if ($userIsLeader) {
                    $this->render('/district/district-leader.php', [
                        'user' => ['post' => $user->role['post']],
                        'district' => $district,
                        'districts' => $this->uins->findBy(['type' => 'district']),
                        'districtBoss' => $districtBoss,
                        'districtStaffs' => $this->users->findBy(['id_uin' => $district['id'], 'id_role' => 5])
                    ]);
                }
            } else {
                (new HomeController)->error(404,'Регион не существует', 'Район который вы ищите не существует, пожалуйста выберите другой либо вернитесь на главную.');
            }
        }
    }
}
