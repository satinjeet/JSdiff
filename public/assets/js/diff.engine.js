var Share = function(element)
{
    var dmp,
        editor,
        timer,
        text = "";
    ;
    var dmp = new diff_match_patch();

    function diff() {
        delta[timestamp] = dmp.diff_toDelta(dmp.diff_main(a, b));   
    };

    var appendToDeltaFile = function(delta) {
      var oldDeltas = JSON.parse( localStorage.getItem(draftName + "-deltas") );
      var newDeltas = $.extend(oldDeltas, delta);
      localStorage.setItem(draftName + "-deltas", JSON.stringify(newDeltas));
    };

    editor = CKEDITOR.replace(element);
    editor.on( 'key', function( evt ) {
        clearTimeout(timer);
        timer = setTimeout(function() {

            patch = dmp.patch_make(text, evt.editor.getData());
            text = evt.editor.getData();

            // console.log(delta);
            // var ranges = editor2.getSelection().getRanges();
            // editor2.setData( dmp.patch_apply(patch, editor2.getData())[0] );
            // editor2.getSelection().selectRanges(ranges);
        }, 500);
    });

    window.exports = {
        dmp: dmp,
        editor: editor,
    }
}
