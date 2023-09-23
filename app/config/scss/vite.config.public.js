import { ViteMinifyPlugin } from 'vite-plugin-minify'
import { defineConfig } from 'vite'

export default defineConfig({
	build: {
		rollupOptions: {
			input: {
				file1: "./app/assets/scss/public/main.scss"
			},
			output: {
				assetFileNames: "public.min.css",
				dir: "./assets/public/css",
			}
		}
	},
	plugins: [
		ViteMinifyPlugin({}),
	],
})