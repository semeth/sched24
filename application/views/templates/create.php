<?= $header; ?>

<div class="row justify-content-between">
    <div class="col-6">
        <div class="card">
            <div class="card-header">
                <div class="form-group">
                    <label>Template Name</label>
                    <input type="text" name="template-title" class="form-control">
                </div>
            </div>
            <div class="card-content p-5">
                <div class="template-preview"></div>
            </div>
            <div class="card-footer">
                <div class="form-group">
                    <input type="submit" name="submit" value="Create Template" class="btn btn-success">
                </div>
            </div>
        </div>
    </div>
    <div class="col-6">
        <div class="placeholders">
            <h4>Placeholders</h4>
            <div class="d-grid py-3">
                <div class="placeholder-item" data-placeholder="banner"><span>Banner</span></div>
                <div class="placeholder-item" data-placeholder="text"><span>Text List</span></div>
                <div class="placeholder-item" data-placeholder="image"><span>Image List</span></div>
                <div class="placeholder-item" data-placeholder="combo"><span>Combo List</span></div>
                <div class="placeholder-item" data-placeholder="grid"><span>Grid List</span></div>
                <div class="placeholder-item" data-placeholder="ads"><span>Ads</div>
                <div class="placeholder-item" data-placeholder="custom-text"><span>Custom Text</span></div>
            </div>
        </div>
        <hr>
        <div class="components">
            <h4>Components</h4>
            <div class="components-placeholder"></div>
        </div>
    </div>
</div>
<hr>
<?= $footer; ?>

<script type="text/template" id="placeholder-banner">
    <div class="placeholder placeholder-banner" placeholder="banner">
        Banner
    </div>
</script>
<script type="text/template" id="placeholder-text">
    <div class="placeholder placeholder-text" placeholder="text">
        Text List
    </div>
</script>
<script type="text/template" id="placeholder-image">
    <div class="placeholder placeholder-image" placeholder="image">
        Image List
    </div>
</script>
<script type="text/template" id="placeholder-combo">
    <div class="placeholder placeholder-combo" placeholder="combo">
        Combo List
    </div>
</script>
<script type="text/template" id="placeholder-grid">
    <div class="placeholder placeholder-grid" placeholder="grid">
        Grid List
    </div>
</script>
<script type="text/template" id="placeholder-ads">
    <div class="placeholder placeholder-ads" placeholder="ads">
        Ads
    </div>
</script>
<script type="text/template" id="placeholder-custom-text">
    <div class="placeholder placeholder-custom-text" placeholder="custom-text">
        Custom Text
    </div>
</script>