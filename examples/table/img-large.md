# img-large
User's avatar image size will be large

### ↳ Stargazers

<!-- REPOSITORY_STARS:START -->

<!-- REPOSITORY_STARS:END -->

### ↳ Forkers

<!-- REPOSITORY_FORKS:START -->

<!-- REPOSITORY_FORKS:END -->

---

```yml
- name: "🐔  Update Repository Roster"
  uses: "varunsridharan/action-repository-roster@main"
  with:
    STARS_OUTPUT_STYLE: "img-large"
    FORK_OUTPUT_STYLE: "img-large"
  env:
    GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
```