# no-name
User's name will not be displayed

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
    STARS_OUTPUT_STYLE: "no-name"
    FORK_OUTPUT_STYLE: "no-name"
  env:
    GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
```