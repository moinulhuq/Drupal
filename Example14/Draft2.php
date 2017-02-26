#To declare entityQuery

  $query = \Drupal::service('entity.query')->get('node');
  
  (or)
  
  $query = \Drupal::entityQuery('node');
  
#To 
