<html> 
  <head> 
    <title>PHP Example</title> 
  </head>
  <body> 
  <?php 
    
    function get_courses_assigned_to_user() {        
      $courses = array (
          array("Code"=>"01","Name"=>"22","PercentageComplete"=>"100","DateCompleted"=>"10/07/2019")
      );
      return $courses;
    }

    function add_my_courses_section() {
      /* just for test */
      /* 
      $api_user_id = get_user_meta( get_current_user_id(), '_external_api_user_id', true );

      if ( ! $api_user_id ) {
        return;
      }
      */
      $api_user_id = "user";

      $courses  = get_courses_assigned_to_user( $api_user_id );
    ?>
    <h2 style="margin-top: 40px;">My Courses</h2>
	<table>
		<thead><tr>
			<th>Course Code'</th>
			<th>Course Title</th>
			<th>Completion</th>
			<th>Date Completed</th>
		</tr></thead>
		<tbody>
    <?php
		foreach( $courses as $course ) :
			?><tr>
			<td><?php echo $course['Code'] ?></td>
			<td><?php echo $course['Name'] ?></td>
			<td><?php echo $course['PercentageComplete'] ?> &#37;</td>
			<td><?php echo $course['DateCompleted'] ?></td>
			</tr>
		<?php endforeach;
		?>
    </tbody>
	</table>
    <?php } ?>
    <?php add_my_courses_section() ?>
    
    <?php
      function get_sso_link() {
        // To be replaced with the actual link
        echo "www.google.com";
      }
    ?>
    <p><a href="<?php get_sso_link() ?>" target="_blank" class="button">Active Course</a></p>
  </body> 
</html>

