function startShow( markdownFile ) {
    remark.create( {
        sourceUrl: markdownFile,
        highlightStyle: 'solarized-dark',
        highlightLines: true,
        ratio: '16:9',
        slideNumberFormat: (current, total) => `
            <div class="slide-number">${current} / ${total}</div>
            <div class="progress-bar-container">
                <div class="progress-bar" style="width: ${(current/total)*100}%"></div>
            </div>`
    } );
}

