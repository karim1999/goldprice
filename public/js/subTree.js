let html = document.getElementById('html'),
    css = document.getElementById('css'),
    js = document.getElementById('js');

CodeMirror.fromTextArea(html, {
    lineNumbers: true,
    direction: "ltr",
    smartIndent:true,
    matchBrackets: true,
    lineWrapping: true,
});

CodeMirror.fromTextArea(css, {
    lineNumbers: true,
    direction: "ltr",
    smartIndent:true,
    matchBrackets: true,
    lineWrapping: true,
    mode: "css",
});
CodeMirror.fromTextArea(js, {
    lineNumbers: true,
    direction: "ltr",
    smartIndent:true,
    matchBrackets: true,
    lineWrapping: true,
    mode: "javascript",
});