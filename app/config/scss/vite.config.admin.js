import { ViteMinifyPlugin } from 'vite-plugin-minify'
import { defineConfig } from 'vite'

export default defineConfig({
	build: {
		rollupOptions: {
			input: {
				file1: "./app/assets/scss/admin/main.scss"
			},
			output: {
				assetFileNames: "admin.min.css",
				dir: "./assets/admin/css",
			}
		}
	},
	plugins: [
		ViteMinifyPlugin({}),
	],
})