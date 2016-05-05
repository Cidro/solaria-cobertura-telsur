<script>
    var contents = <?=json_encode([
        'config' => $config->toArray()
    ]);?>;
</script>
<div class="row" ng-controller="CoberturaTelsurModuleController" ng-init="init()">
    <pre>{{ config }}</pre>
</div>