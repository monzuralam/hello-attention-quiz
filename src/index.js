wp.blocks.registerBlockType("hello-attention-quiz/are-you-paying-attention", {
    title: "Are You Paying Attention ?",
    icon: "smiley",
    category: "common",
    edit: function () {
        return (
            <div>
                <h2>Attention</h2>
                <p style={{color: 'green'}}>Paragraph</p>
            </div>
        );
    },
    save: function () {
        return (
            <div>
                <h3>Hello Attention Frontend</h3>
            </div>
        );
    }
});