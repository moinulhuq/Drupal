#To get nid of all nodes
  $nids = \Drupal::entityQuery('node')->execute();

#To get all node types (or) entities array
  $entity_storage = \Drupal::entityTypeManager()->getStorage('node')->loadMultiple();

#To get a node content type (or) entity type
  $entity_storage = \Drupal::entityTypeManager()->getStorage('node')->loadMultiple()[1]->bundle();
  $entity_storage = \Drupal::entityTypeManager()->getStorage('node')->load(1)->bundle();

#To get id of only 'Basic page' (or) 'Article' among all nids
  $nids = \Drupal::entityTypeManager()->getStorage('node')->getQuery()->condition('type', 'article')->execute();

#To create node of article type
	$node = \Drupal::entityTypeManager()->getStorage('node')->create(array('type' => 'article', 'title' => 'Another node'));
	$node->save();


https://www.drupal.org/docs/8/api/entity-api/working-with-the-entity-api
http://www.qed42.com/blog/url-alias-update-using-batch-api-drupal-8
