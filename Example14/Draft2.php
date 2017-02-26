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

#To find particular nodes which nid is equal to 4 or greater than 4.

  $query = \Drupal::entityQuery('node')
		->condition('nid', 4, '>=')
		->execute();
  result = 4, 5

#To find particular nodes which is created by 'moin'.

  $query = \Drupal::entityQuery('node')
		->condition('uid.entity.name', 'moin')
		->execute();

#To 'nid' in descending order.

  $query = \Drupal::entityQuery('node')
		->sort('nid', 'DESC')
		->execute();
