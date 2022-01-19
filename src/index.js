wp.blocks.registerBlockType("hello-attention-quiz/are-you-paying-attention", {
    title: "Are You Paying Attention ?",
    icon: "smiley",
    attributes: {
        skyColor: {type: "string"},
        grassColor: {type: "string"},
    },
    category: "common",
    edit: function (props) {
        function updateSkyColor(event){
            props.setAttributes({skyColor: event.target.value});
        }
        
        function updateGrassColor(event){
            props.setAttributes({grassColor: event.target.value});
        }
        return (
            <div>
                <input type="text" placeholder="Sky Color" value={props.attributes.skyColor} onChange={updateSkyColor} />
                <input type="text" placeholder="Grass Color" value={props.attributes.grassColor} onChange={updateGrassColor} />
            </div>
        );
    },
    save: function (props) {
        return (
            <div>
                <p>Today the sky is {props.attributes.skyColor} and the grass is {props.attributes.grassColor}.</p>
            </div>
        );
    },
    deprecated: [{
        attributes: {
            skyColor: {type: "string"},
            grassColor: {type: "string"},
        },
        save: function (props) {
            return (
                <div>
                    <p>Today the sky is {props.attributes.skyColor} and the grass is {props.attributes.grassColor}.</p>
                </div>
            );
        }
    }]
});