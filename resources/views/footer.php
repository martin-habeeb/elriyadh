<script type='text/javascript' defer src='/wp-content/plugins/ninja-forms/assets/js/min/front-end.js?ver=3.6.25'
        id='nf-front-end-js'></script>
<script type='text/javascript' defer src='/wp-content/plugins/vamtam-elements-b/assets/fl-photo.js?ver=6.2.2'
        id='vamtam-fl-photo-js'></script>
<script id="tmpl-nf-layout" type="text/template">

    <span id="nf-form-title-{{{ data.id }}}" class="nf-form-title">
		{{{ ( 1 == data.settings.show_title ) ? '<h' + data.settings.form_title_heading_level + '>' + data.settings.title + '</h
        ' + data.settings.form_title_heading_level + '>' : '' }}}
	</span>
    <div class="nf-form-wrap ninja-forms-form-wrap">
        <div class="nf-response-msg"></div>
        <div class="nf-debug-msg"></div>
        <div class="nf-before-form"></div>
        <div class="nf-form-layout"></div>
        <div class="nf-after-form"></div>
    </div>

</script>
<script id="tmpl-nf-empty" type="text/template"></script>
<script id="tmpl-nf-before-form" type="text/template">

    {{{ data.beforeForm }}}

</script>
<script id="tmpl-nf-after-form" type="text/template">

    {{{ data.afterForm }}}

</script>
<script id="tmpl-nf-before-fields" type="text/template">

    <div class="nf-form-fields-required">{{{ data.renderFieldsMarkedRequired() }}}</div>
    {{{ data.beforeFields }}}

</script>
<script id="tmpl-nf-after-fields" type="text/template">

    {{{ data.afterFields }}}
    <div id="nf-form-errors-{{{ data.id }}}" class="nf-form-errors" role="alert"></div>
    <div class="nf-form-hp"></div>

</script>
<script id="tmpl-nf-before-field" type="text/template">

    {{{ data.beforeField }}}

</script>
<script id="tmpl-nf-after-field" type="text/template">

    {{{ data.afterField }}}

</script>
<script id="tmpl-nf-form-layout" type="text/template">

    <form>
        <div>
            <div class="nf-before-form-content"></div>
            <div class="nf-form-content {{{ data.element_class }}}"></div>
            <div class="nf-after-form-content"></div>
        </div>
    </form>

</script>
<script id="tmpl-nf-form-hp" type="text/template">

    <label id="nf-label-field-hp-{{{ data.id }}}" for="nf-field-hp-{{{ data.id }}}" aria-hidden="true">
        {{{ nfi18n.formHoneypot }}}
        <input id="nf-field-hp-{{{ data.id }}}" name="nf-field-hp" class="nf-element nf-field-hp" type="text" value=""
               aria-labelledby="nf-label-field-hp-{{{ data.id }}}"/>
    </label>

</script>
<script id="tmpl-nf-field-layout" type="text/template">

    <div id="nf-field-{{{ data.id }}}-container"
         class="nf-field-container {{{ data.type }}}-container {{{ data.renderContainerClass() }}}">
        <div class="nf-before-field"></div>
        <div class="nf-field"></div>
        <div class="nf-after-field"></div>
    </div>

</script>
<script id="tmpl-nf-field-before" type="text/template">

    {{{ data.beforeField }}}

</script>
<script id="tmpl-nf-field-after" type="text/template">

    <#
    /*
    * Render our input limit section if that setting exists.
    */
    #>
    <div class="nf-input-limit"></div>
    <#
    /*
    * Render our error section if we have an error.
    */
    #>
    <div id="nf-error-{{{ data.id }}}" class="nf-error-wrap nf-error" role="alert"></div>
    <#
    /*
    * Render any custom HTML after our field.
    */
    #>
    {{{ data.afterField }}}

</script>
<script id="tmpl-nf-field-wrap" type="text/template">

    <div id="nf-field-{{{ data.id }}}-wrap" class="{{{ data.renderWrapClass() }}}" data-field-id="{{{ data.id }}}">
        <#
        /*
        * This is our main field template. It's called for every field type.
        * Note that must have ONE top-level, wrapping element. i.e. a div/span/etc that wraps all of the template.
        */
        #>
        <#
        /*
        * Render our label.
        */
        #>
        {{{ data.renderLabel() }}}
        <#
        /*
        * Render our field element. Uses the template for the field being rendered.
        */
        #>
        <div class="nf-field-element">{{{ data.renderElement() }}}</div>
        <#
        /*
        * Render our Description Text.
        */
        #>
        {{{ data.renderDescText() }}}
    </div>

</script>
<script id="tmpl-nf-field-wrap-no-label" type="text/template">

    <div id="nf-field-{{{ data.id }}}-wrap" class="{{{ data.renderWrapClass() }}}" data-field-id="{{{ data.id }}}">
        <div class="nf-field-label"></div>
        <div class="nf-field-element">{{{ data.renderElement() }}}</div>
        <div class="nf-error-wrap"></div>
    </div>

</script>
<script id="tmpl-nf-field-wrap-no-container" type="text/template">


    {{{ data.renderElement() }}}

    <div class="nf-error-wrap"></div>

</script>
<script id="tmpl-nf-field-label" type="text/template">

    <div class="nf-field-label">
        <# if ( data.type === "listcheckbox" || data.type === "listradio" ) { #>
        <span id="nf-label-field-{{{ data.id }}}"
              class="nf-label-span {{{ data.renderLabelClasses() }}}">
					{{{ ( data.maybeFilterHTML() === 'true' ) ? _.escape( data.label ) : data.label }}} {{{ ( 'undefined' != typeof data.required && 1 == data.required ) ? '<span
                class="ninja-forms-req-symbol">*</span>' : '' }}}
                {{{ data.maybeRenderHelp() }}}
			</span>
        <# } else { #>
        <label for="nf-field-{{{ data.id }}}"
               id="nf-label-field-{{{ data.id }}}"
               class="{{{ data.renderLabelClasses() }}}">
            {{{ ( data.maybeFilterHTML() === 'true' ) ? _.escape( data.label ) : data.label }}} {{{ ( 'undefined' !=
            typeof data.required && 1 == data.required ) ? '<span class="ninja-forms-req-symbol">*</span>' : '' }}}
            {{{ data.maybeRenderHelp() }}}
        </label>
        <# } #>
    </div>

</script>
<script id="tmpl-nf-field-error" type="text/template">

    <div class="nf-error-msg nf-error-{{{ data.id }}}">{{{ data.msg }}}</div>

</script>
<script id="tmpl-nf-form-error" type="text/template">

    <div class="nf-error-msg nf-error-{{{ data.id }}}">{{{ data.msg }}}</div>

</script>
<script id="tmpl-nf-field-input-limit" type="text/template">

    {{{ data.currentCount() }}} {{{ nfi18n.of }}} {{{ data.input_limit }}} {{{ data.input_limit_msg }}}

</script>
<script id="tmpl-nf-field-null" type="text/template"></script>
<script id="tmpl-nf-field-firstname" type="text/template">

    <input
        type="text"
        value="{{{ _.escape( data.value ) }}}"
        class="{{{ data.renderClasses() }}} nf-element"

        id="nf-field-{{{ data.id }}}"
    <# if( ! data.disable_browser_autocompletes ){ #>
    name="{{ data.custom_name_attribute || 'nf-field-' + data.id + '-' + data.type }}"
    autocomplete="given-name"
    <# } else { #>
    name="{{ data.custom_name_attribute || 'nf-field-' + data.id }}"
    {{{ data.maybeDisableAutocomplete() }}}
    <# } #>
    {{{ data.renderPlaceholder() }}}

    aria-invalid="false"
    aria-describedby="nf-error-{{{ data.id }}}"
    aria-labelledby="nf-label-field-{{{ data.id }}}"

    {{{ data.maybeRequired() }}}
    >

</script>
<script id='tmpl-nf-field-input' type='text/template'>

    <input id="nf-field-{{{ data.id }}}" name="nf-field-{{{ data.id }}}" aria-invalid="false"
           aria-describedby="nf-error-{{{ data.id }}}" class="{{{ data.renderClasses() }}} nf-element" type="text"
           value="{{{ _.escape( data.value ) }}}" {{{ data.renderPlaceholder() }}} {{{ data.maybeDisabled() }}}
           aria-labelledby="nf-label-field-{{{ data.id }}}"

           {{{ data.maybeRequired() }}}
    >

</script>
<script id="tmpl-nf-field-email" type="text/template">

    <input
        type="email"
        value="{{{ _.escape( data.value ) }}}"
        class="{{{ data.renderClasses() }}} nf-element"

        id="nf-field-{{{ data.id }}}"
    <# if( ! data.disable_browser_autocompletes ){ #>
    name="{{ data.custom_name_attribute || 'nf-field-' + data.id + '-' + data.type }}"
    autocomplete="email"
    <# } else { #>
    name="{{ data.custom_name_attribute || 'nf-field-' + data.id }}"
    {{{ data.maybeDisableAutocomplete() }}}
    <# } #>
    {{{ data.renderPlaceholder() }}}
    {{{ data.maybeDisabled() }}}

    aria-invalid="false"
    aria-describedby="nf-error-{{{ data.id }}}"
    aria-labelledby="nf-label-field-{{{ data.id }}}"

    {{{ data.maybeRequired() }}}
    >

</script>
<script id="tmpl-nf-field-address" type="text/template">

    <input
        type="text"
        value="{{{ _.escape( data.value ) }}}"
        class="{{{ data.renderClasses() }}} nf-element"

        id="nf-field-{{{ data.id }}}"
    <# if( ! data.disable_browser_autocompletes ){ #>
    name="{{ data.custom_name_attribute || 'nf-field-' + data.id + '-' + data.type }}"
    autocomplete="address-line1"
    <# } else { #>
    name="{{ data.custom_name_attribute || 'nf-field-' + data.id }}"
    {{{ data.maybeDisableAutocomplete() }}}
    <# } #>
    {{{ data.renderPlaceholder() }}}
    {{{ data.maybeDisabled() }}}

    aria-invalid="false"
    aria-describedby="nf-error-{{{ data.id }}}"
    aria-labelledby="nf-label-field-{{{ data.id }}}"

    {{{ data.maybeRequired() }}}
    >

</script>
<script id="tmpl-nf-field-textbox" type="text/template">

    <input
        type="text"
        value="{{{ _.escape( data.value ) }}}"
        class="{{{ data.renderClasses() }}} nf-element"
        {{{ data.renderPlaceholder() }}}
        {{{ data.maybeDisabled() }}}
        {{{ data.maybeInputLimit() }}}

        id="nf-field-{{{ data.id }}}"
    <# if( ! data.disable_browser_autocomplete && -1 < [ 'city', 'zip' ].indexOf( data.type ) ){ #>
    name="{{ data.custom_name_attribute || 'nf-field-' + data.id + '-' + data.type }}"
    autocomplete="on"
    <# } else { #>
    name="{{ data.custom_name_attribute || 'nf-field-' + data.id }}"
    {{{ data.maybeDisableAutocomplete() }}}
    <# } #>

    aria-invalid="false"
    aria-describedby="nf-error-{{{ data.id }}}"
    aria-labelledby="nf-label-field-{{{ data.id }}}"

    {{{ data.maybeRequired() }}}
    >

</script>
<script id="tmpl-nf-field-tel" type="text/template">

    <input
        type="tel"
        value="{{{ _.escape( data.value ) }}}"
        class="{{{ data.renderClasses() }}} nf-element"

        id="nf-field-{{{ data.id }}}"
    <# if( ! data.disable_browser_autocompletes ){ #>
    name="{{ data.custom_name_attribute || 'nf-field-' + data.id + '-' + data.type }}"
    autocomplete="tel"
    <# } else { #>
    name="{{ data.custom_name_attribute || 'nf-field-' + data.id }}"
    {{{ data.maybeDisableAutocomplete() }}}
    <# } #>
    {{{ data.renderPlaceholder() }}}

    aria-invalid="false"
    aria-describedby="nf-error-{{{ data.id }}}"
    aria-labelledby="nf-label-field-{{{ data.id }}}"

    {{{ data.maybeRequired() }}}
    >

</script>
<script id="tmpl-nf-field-listselect" type="text/template">

    <select id="nf-field-{{{ data.id }}}" name="nf-field-{{{ data.id }}}" aria-invalid="false"
            aria-describedby="nf-error-{{{ data.id }}}" class="{{{ data.renderClasses() }}} nf-element" {{{
            data.renderOtherAttributes() }}}
            aria-labelledby="nf-label-field-{{{ data.id }}}"

            {{{ data.maybeRequired() }}}
    >
        {{{ data.renderOptions() }}}
    </select>
    <div for="nf-field-{{{ data.id }}}"></div>

</script>
<script id="tmpl-nf-field-listselect-option" type="text/template">

    <# if ( ! data.visible ) { return ''; } #>
    <option value="{{{ data.value }}}" {{{ ( 1== data.selected )
            ? 'selected="selected"' : '' }}} >{{{ data.label }}}</option>

</script>
<script id="tmpl-nf-field-textarea" type="text/template">

    <textarea id="nf-field-{{{ data.id }}}" name="nf-field-{{{ data.id }}}" aria-invalid="false"
              aria-describedby="nf-error-{{{ data.id }}}" class="{{{ data.renderClasses() }}} nf-element" {{{
              data.renderPlaceholder() }}} {{{ data.maybeDisabled() }}} {{{ data.maybeDisableAutocomplete() }}} {{{
              data.maybeInputLimit() }}}
              aria-labelledby="nf-label-field-{{{ data.id }}}"

              {{{ data.maybeRequired() }}}
    >{{{ _.escape( data.value ) }}}</textarea>

</script>
<script id="tmpl-nf-rte-media-button" type="text/template">

    <span class="dashicons dashicons-admin-media"></span>

</script>
<script id="tmpl-nf-rte-link-button" type="text/template">

    <span class="dashicons dashicons-admin-links"></span>

</script>
<script id="tmpl-nf-rte-unlink-button" type="text/template">

    <span class="dashicons dashicons-editor-unlink"></span>

</script>
<script id="tmpl-nf-rte-link-dropdown" type="text/template">

    <div class="summernote-link">
        URL
        <input type="url" class="widefat code link-url"> <br/>
        Text
        <input type="url" class="widefat code link-text"> <br/>
        <label>
            <input type="checkbox" class="link-new-window"> {{{ nfi18n.fieldsTextareaOpenNewWindow }}}
        </label>
        <input type="button" class="cancel-link extra" value="Cancel">
        <input type="button" class="insert-link extra" value="Insert">
    </div>

</script>
<script id="tmpl-nf-field-submit" type="text/template">

    <input id="nf-field-{{{ data.id }}}" class="{{{ data.renderClasses() }}} nf-element " type="{{{data.type}}}"
           value="{{{ ( data.maybeFilterHTML() === 'true' ) ? _.escape( data.label ) : data.label }}}" {{{ (
           data.disabled ) ? 'aria-disabled="true" disabled="true"' : '' }}}>

</script>
<script id='tmpl-nf-field-button' type='text/template'>

    <button id="nf-field-{{{ data.id }}}" name="nf-field-{{{ data.id }}}" class="{{{ data.classes }}} nf-element">
        {{{ ( data.maybeFilterHTML() === 'true' ) ? _.escape( data.label ) : data.label }}}
    </button>

</script>
<script>
    window.lazyLoadOptions = [{
        elements_selector: "img[data-lazy-src],.rocket-lazyload,iframe[data-lazy-src]",
        data_src: "lazy-src",
        data_srcset: "lazy-srcset",
        data_sizes: "lazy-sizes",
        class_loading: "lazyloading",
        class_loaded: "lazyloaded",
        threshold: 300,
        callback_loaded: function (element) {
            if (element.tagName === "IFRAME" && element.dataset.rocketLazyload == "fitvidscompatible") {
                if (element.classList.contains("lazyloaded")) {
                    if (typeof window.jQuery != "undefined") {
                        if (jQuery.fn.fitVids) {
                            jQuery(element).parent().fitVids()
                        }
                    }
                }
            }
        }
    }, {
        elements_selector: ".rocket-lazyload",
        data_src: "lazy-src",
        data_srcset: "lazy-srcset",
        data_sizes: "lazy-sizes",
        class_loading: "lazyloading",
        class_loaded: "lazyloaded",
        threshold: 300,
    }];
    window.addEventListener('LazyLoad::Initialized', function (e) {
        var lazyLoadInstance = e.detail.instance;
        if (window.MutationObserver) {
            var observer = new MutationObserver(function (mutations) {
                    var image_count = 0;
                    var iframe_count = 0;
                    var rocketlazy_count = 0;
                    mutations.forEach(function (mutation) {
                        for (var i = 0; i < mutation.addedNodes.length; i++) {
                            if (typeof mutation.addedNodes[i].getElementsByTagName !== 'function') {
                                continue
                            }
                            if (typeof mutation.addedNodes[i].getElementsByClassName !== 'function') {
                                continue
                            }
                            images = mutation.addedNodes[i].getElementsByTagName('img');
                            is_image = mutation.addedNodes[i].tagName == "IMG";
                            iframes = mutation.addedNodes[i].getElementsByTagName('iframe');
                            is_iframe = mutation.addedNodes[i].tagName == "IFRAME";
                            rocket_lazy = mutation.addedNodes[i].getElementsByClassName('rocket-lazyload');
                            image_count += images.length;
                            iframe_count += iframes.length;
                            rocketlazy_count += rocket_lazy.length;
                            if (is_image) {
                                image_count += 1
                            }
                            if (is_iframe) {
                                iframe_count += 1
                            }
                        }
                    });
                    if (image_count > 0 || iframe_count > 0 || rocketlazy_count > 0) {
                        lazyLoadInstance.update()
                    }
                }
            );
            var b = document.getElementsByTagName("body")[0];
            var config = {
                childList: !0,
                subtree: !0
            };
            observer.observe(b, config)
        }
    }, !1)
</script>
<script data-no-minify="1" async src="/wp-content/plugins/wp-rocket/assets/js/lazyload/17.8.3/lazyload.min.js"></script>
