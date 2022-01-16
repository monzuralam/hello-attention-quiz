wp.blocks.registerBlockType("hello-attention-quiz/are-you-paying-attention", {
    title: "Are You Paying Attention ?",
    icon: "smiley",
    category: "common",
    edit: function () {
        return wp.element.createElement("h2", null, "Hello Attention editor");
    },
    save: function () {
        return wp.element.createElement("h3", null, "Hello Attention frontend");
    }
});