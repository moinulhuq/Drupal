#To declare entityQuery

  $query = \Drupal::service('entity.query')->get('node');
  
  (or)
  
  $query = \Drupal::entityQuery('node');
  
#To get all nid of 'Basic Page'

  $query = \Drupal::entityQuery('node')
		->condition('type', 'page')
		->condition('status', 1)
		->execute();

#To get user 'moin' from 'users' table

  $query = \Drupal::entityQuery('user')
		->condition('name', 'moin', 'CONTAINS')
		->condition('roles', 'Administrator', 'CONTAINS')
		->execute();

#To find particular nodes published in the last year.

  $now = time();
  $last_year = $now - 60*60*24*365;

  $query = \Drupal::entityQuery('node')
		->condition('created', $last_year, '>=')
		->execute();
