import { ViteMinifyPlugin } from 'vite-plugin-minify'
import { defineConfig } from 'vite'

export default defineConfig({
	build: {
		rollupOptions: {
			input: {
				file1: "./app/assets/js/admin/entrypoint"
			},
			output: {
				entryFileNames: "admin.script.min.js",
				format: 'iife',
				dir: "./assets/admin/js",
			}
		}
	},
	plugins: [
		ViteMinifyPlugin({}),
	],
})