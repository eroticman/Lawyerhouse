<?php
    session_start();
    if(empty($_SESSION["lang"])){ $_SESSION["lang"] = 'th';}
    if(!empty($_POST["language"])){$_SESSION["lang"] = $_POST["language"]; header("Refresh:0");}

// ตัวแปล
if($_SESSION["lang"] == 'en'){
    $home = 'Home';
    $about = 'About Us';
    $team = 'Team';
    $services = 'Services';
    $realestate = 'Real Estate';
    $news = 'News & Blog';
    $contact = 'Contact Us';
    $lawyer = 'Lawyer House Company Limited';
    $aboutindex = '‘Lawyer House’ is a full-service legal advising firm in Thailand with professional lawyers who experience many fields of Laws, whether Civil and Commercial Law, Criminal Law, Intellectual Property Law, Family Law, Taxation Law, Labor Law, and so on.';
    $aboutus = 'We emphasize that satisfied our clients with service mind is the core of our business. As a well-established and trustworthy company, we provided local and international clients with expert advice and other matters in which legal assistance is needed.';
    $viewall = 'View All';
    $read = 'Read';
    $address = '77/358 Passorn 19 Village, Chatuchot Rd, Orngoen, SaiMai, Bangkok, 10220';
    $scan = 'Scan or Click';
    $contactform = 'Contact Form';
    $submit = 'Submit';
    $firstname = 'First Name';
    $lastname = 'Last Name';
    $tel = 'Tel';
    $email = 'Email';
    $message = 'Message';
    $create = 'Create Date';
    $relate = 'Related News & Blog';

}else{
    $home = 'หน้าแรก';
    $about = 'เกี่ยวกับเรา';
    $team = 'ทีมงาน';
    $services = 'บริการของเรา';
    $realestate = 'อสังหาริมทรัพย์';
    $news = 'ข่าวสารและบทความ';
    $contact = 'ติดต่อเรา';
    $lawyer = 'บริษัท ลอว์เยอร์ เฮ้าส์ จำกัด';
    $aboutus = 'เป็นบริษัทที่ให้ความสำคัญกับการบริการที่มีคุณภาพด้วยใจ(SERVICE  MIND) <br>
    เพื่อให้ลูกค้าเกิดพึงพอใจมากที่สุด โดยมุ่งเน้นการให้คำปรึกษาและแก้ไขปัญหาพร้อมทั้งให้ข้อมูลกฎหมายต่างๆ 
    ที่เป็นประโยชน์ให้กับลูกค้าของเราอย่างสูงสุด มีการบริหารงานอย่างเป็นระบบด้วยเครื่องมือที่ทันสมัย 
    ทำให้เราได้รับการยอมรับให้เป็นที่ปรึกษากฎหมายให้กับบุคคล นิติบุคคล  และองค์กรต่างๆ หน่วยงานราชการทั้งในและต่างประเทศ';
    $aboutindex = 'เป็นบริษัทให้บริการด้านกฎหมายครบวงจร<br class="hide-480">
    ก่อตั้งขึ้นจากการรวมตัวกันของนักกฎหมายที่มีความเชี่ยวชาญระดับมืออาชีพ<br
      class="hide-480">ที่มีประสบการณ์ทางด้านกฎหมายยาวนาน ประกอบด้วยผู้เชี่ยวชาญ
    ด้านกฎหมายหลายๆด้าน ไม่ว่าจะเป็น กฎหมายแพ่งและพาณิชย์ กฎหมายอาญา กฎหมายทรัพย์สินทางปัญญา กฎหมายปกครอง
    กฎหมายครอบครัว และกฎหมายภาษีอากร กฎหมายแรงงาน เป็นต้น';
    $viewall = 'ดูทั้งหมด';
    $read = 'อ่านต่อ';
    $address = '77/358 หมู่บ้านภัสสร 19 ถนนจตุโชติ <br> แขวงออเงิน เขตสายไหม กรุงเทพมหานคร 10220';
    $scan = 'สแกนหรือคลิก';
    $contactform = 'ส่งข้อความถึงเรา';
    $submit = 'ส่งข้อความ';
    $firstname = 'ชื่อ';
    $lastname = 'นามสกุล';
    $tel = 'เบอร์โทรศัพท์';
    $email = 'อีเมล์';
    $message = 'ข้อความ';
    $create = 'สร้างเมื่อ : วันที่';
    $relate = 'ข่าวสารและบทความที่เกี่ยวข้อง';
}