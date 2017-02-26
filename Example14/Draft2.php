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

#To
