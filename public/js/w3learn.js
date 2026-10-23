/* public/js/w3learn.js — code highlight + "Try it Yourself" (no backend needed) */
(function () {
    function esc(s) {
        return s.replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;');
    }

    function highlight(src) {
        var re = /(<!--[\s\S]*?-->)|<(\/?)([A-Za-z][\w-]*)([^<>]*?)(\/?)>/g;
        var out = '', last = 0, m;
        while ((m = re.exec(src))) {
            out += esc(src.slice(last, m.index));
            if (m[1]) {
                out += '<span class="c-cmt">' + esc(m[1]) + '</span>';
            } else {
                var attrs = esc(m[4]).replace(
                    /([\w:-]+)(=)("[^"]*"|'[^']*')/g,
                    '<span class="c-attr">$1</span>$2<span class="c-val">$3</span>'
                );
                out += '<span class="c-br">&lt;' + m[2] + '</span>' +
                       '<span class="c-tag">' + m[3] + '</span>' + attrs +
                       '<span class="c-br">' + m[5] + '&gt;</span>';
            }
            last = re.lastIndex;
        }
        return out + esc(src.slice(last));
    }

    function dedent(text) {
        var lines = text.replace(/^\s*\n/, '').replace(/\s+$/, '').split('\n');
        var min = Infinity;
        lines.forEach(function (l) {
            if (l.trim()) { min = Math.min(min, l.match(/^\s*/)[0].length); }
        });
        if (!isFinite(min)) { min = 0; }
        return lines.map(function (l) { return l.slice(min); }).join('\n');
    }

    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.w3-article .example').forEach(function (box) {
            var holder = box.querySelector('.code');
            if (!holder) { return; }

            // Raw source: <script type="text/plain"> (preferred) or an escaped <pre>
            var scriptTag = holder.querySelector('script[type="text/plain"]');
            var preTag = holder.querySelector('pre');
            var src = scriptTag ? scriptTag.textContent : (preTag ? preTag.textContent : '');
            src = dedent(src);

            holder.innerHTML = '<pre>' + highlight(src) + '</pre>';
            holder.dataset.src = src;
        });

        document.querySelectorAll('.w3-article .tryit').forEach(function (btn) {
            btn.addEventListener('click', function (e) {
                e.preventDefault();
                var box = btn.closest('.example');
                var holder = box && box.querySelector('.code');
                if (!holder) { return; }

                var code = holder.dataset.src || '';
                if (!/<html[\s>]/i.test(code)) {
                    code = '<!DOCTYPE html><html><head><meta charset="utf-8">' +
                           '<title>Try it Yourself</title></head><body>' + code + '</body></html>';
                }
                var w = window.open('', '_blank');
                if (w) { w.document.open(); w.document.write(code); w.document.close(); }
            });
        });
    });
})();
