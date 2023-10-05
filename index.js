panel.plugin("mountbatt/accordion-block", {
  blocks: {
    accordion: `
      	<div @dblclick="open">
		    <template v-if="content.accordion.length === 0">
		    	<details open><summary v-text="$t('field.blocks.accordion.name')"></summary><span v-text="$t('field.blocks.accordion.empty')"></span></details>
		    </template>
		    <template v-else>
		        <details open v-for="item in content.accordion">
						<summary v-if="item.summary">{{ item.summary }}</summary>
		        <summary v-else>Details</summary>
		        <div v-html="item.details" class="k-text"></div>
		        </details>
						<div v-text="content.accordion.schema"></div>
		    </template>
		</div>
    `
  }
}); 