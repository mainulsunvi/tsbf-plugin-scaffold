import { ViteMinifyPlugin } from 'vite-plugin-minify'
import { defineConfig } from 'vite'

export default defineConfig({
	build: {
		rollupOptions: {
			input: {
				file1: "./app/assets/js/public/entrypoint"
			},
			output: {
				entryFileNames: "public.script.min.js",
				format: 'iife',
				dir: "./assets/public/js"
			}
		}

	},
	plugins: [
		ViteMinifyPlugin({}),
	],
})