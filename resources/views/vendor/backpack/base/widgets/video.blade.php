<div class="{{ $widget['wrapperClass'] ?? 'col-sm-6 col-md-4' }}">
    <div class="{{ $widget['class'] ?? 'mb-2' }} embed-responsive embed-responsive-16by9">
        <iframe 
            class="embed-responsive-item" 
            src="{{ $widget['embed'] }}" 
            allowfullscreen>
        </iframe>
    </div>
</div>