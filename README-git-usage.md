# How to Push Your Work to Git

1. **Open your terminal or command prompt.**
2. **Navigate to your project directory:**
   ```
   cd "c:\xampp\htdocs\Iuea-Dcoument-Tracking-System"
   ```

3. **Initialize git (if not already initialized):**
   ```
   git init
   ```

4. **Add all your changes:**
   ```
   git add .
   ```

5. **Commit your changes:**
   ```
   git commit -m "Your commit message here"
   ```

6. **Add your remote repository (only if not already added):**
   ```
   git remote add origin https://github.com/your-username/your-repo.git
   ```

7. **Push your changes to the remote repository:**
   ```
   git push -u origin main
   ```
   > If your branch is called `master`, use `master` instead of `main`.

**Note:**  
- Replace `https://github.com/your-username/your-repo.git` with your actual repository URL.
- You may be prompted for your GitHub username and password or token.

``markdown
## Example SVG Icon

```svg
<!-- Sun Icon SVG -->
<svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2m0 14v2m-9-2M5 12h14m-2-9m2 14m-6.343-6.343L4.929 4.929" />
</svg>
