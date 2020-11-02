# bold,italic,img-small
Username will be bold & italic & User's avatar will be small

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
    STARS_OUTPUT_STYLE: "bold,italic,img-small"
    FORK_OUTPUT_STYLE: "bold,italic,img-small"
  env:
    GITHUB_TOKEN: ${{ secrets.GITHUB_TOKEN }}
```