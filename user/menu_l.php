 <aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="../m_img/<?php echo $m_img; ?>" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        <p> <?php echo $m_name; ?></p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"><t></i>กำลังใช้งาน</a>
      </div>
    </div>
    <ul class="sidebar-menu" data-widget="tree">
        <li>
        <a href="index.php"><i class="fa fa-user"></i>
          <span> ประวัติส่วนตัว</span>
        </a>
      </li>
    
      <li>
        <a href="member.php"><i class="glyphicon glyphicon-pencil"></i>
          <span> แก้ไขข้อมูล</span>
        </a>
      </li>
      <li>
        <a href="type.php"><i class="glyphicon glyphicon-file"></i>
          <span>ลงทะเบียน</span>
        </a>
      </li>
        <li>
        <a href="member_profile.php"><i class="glyphicon glyphicon-asterisk"></i>
          <span>ติดตามสถานะ</span>
        </a>
      <li>
      <li>
        <a href="member_profile.php"><i class="glyphicon glyphicon-calendar"></i>
          <span>ลงเวลาปฏิบัติ</span>
        </a>
      <li>
      <li>
        <a href="member_profile.php"><i class="glyphicon glyphicon-folder-open"></i>
          <span>บันทึกการปฏิบัติงาน</span>
        </a>
      <li>
      <li>
        <a href="member_profile.php"><i class="glyphicon glyphicon-folder-close"></i>
          <span>สรุปบันทึกการตรวจฝึกงาน</span>
        </a>
      <li>
        <a href="../logout.php" onclick="return confirm('คุณต้องการออกจากระบบหรือไม่ ?');"><i class="glyphicon glyphicon-off"></i>
          <span> ออกจากระบบ</span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>