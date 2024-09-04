<div class="vstack gap-3">
    <div>
        <label for="name" class="form-label">Name:</label>
        <input class="form-control" type="text" id="name" name="name" value="{{old('name', $project->name ?? '')}}" />
        @error('name')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div>
        <label class="form-label" for="github_repo_url">Github:</label>
        <input class="form-control" id="github_repo_url" name="github_repo_url" value="{{old('github_repo_url', $project->github_repo_url ?? '')}}" />
        @error('github_repo_url')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div>
        <label class="form-label" for="website_url">Website:</label>
        <input class="form-control" id="website_url" name="website_url" value="{{old('website_url', $project->website_url ?? '')}}" />
        @error('website_url')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>

    <div class="form-check">
        <input class="form-check-input" type="checkbox" id="is_published" name="is_published" @checked(old('is_published', $project->is_published ?? ''))>
        <label class="form-check-label" for="is_published">Is published:</label>
        @error('is_published')
        <small class="text-danger">{{$message}}</small>
        @enderror
    </div>
    <button class="btn btn-primary" type="submit">Submit</button>
</div>