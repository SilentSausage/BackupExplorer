<?php
	$rdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $rdata)));
	$jdata = array_map('to_utf8', array_map('safe_html', array_map('html_attr_tags_ok', $jdata)));
?>
<script>
	$j(function() {
		var tn = 'Jobs';

		/* data for selected record, or defaults if none is selected */
		var data = {
			client: <?php echo json_encode(['id' => $rdata['client'], 'value' => $rdata['client'], 'text' => $jdata['client']]); ?>,
			software: <?php echo json_encode(['id' => $rdata['software'], 'value' => $rdata['software'], 'text' => $jdata['software']]); ?>,
			endpoint: <?php echo json_encode(['id' => $rdata['endpoint'], 'value' => $rdata['endpoint'], 'text' => $jdata['endpoint']]); ?>,
			method: <?php echo json_encode(['id' => $rdata['method'], 'value' => $rdata['method'], 'text' => $jdata['method']]); ?>,
			destination: <?php echo json_encode(['id' => $rdata['destination'], 'value' => $rdata['destination'], 'text' => $jdata['destination']]); ?>
		};

		/* initialize or continue using AppGini.cache for the current table */
		AppGini.cache = AppGini.cache || {};
		AppGini.cache[tn] = AppGini.cache[tn] || AppGini.ajaxCache();
		var cache = AppGini.cache[tn];

		/* saved value for client */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'client' && d.id == data.client.id)
				return { results: [ data.client ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for software */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'software' && d.id == data.software.id)
				return { results: [ data.software ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for endpoint */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'endpoint' && d.id == data.endpoint.id)
				return { results: [ data.endpoint ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for method */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'method' && d.id == data.method.id)
				return { results: [ data.method ], more: false, elapsed: 0.01 };
			return false;
		});

		/* saved value for destination */
		cache.addCheck(function(u, d) {
			if(u != 'ajax_combo.php') return false;
			if(d.t == tn && d.f == 'destination' && d.id == data.destination.id)
				return { results: [ data.destination ], more: false, elapsed: 0.01 };
			return false;
		});

		cache.start();
	});
</script>

